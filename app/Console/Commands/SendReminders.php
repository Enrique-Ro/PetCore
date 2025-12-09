<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reminder;
use App\Mail\RecordatorioMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class SendReminders extends Command
{
    protected $signature = 'petcore:send-reminders';
    protected $description = 'Enviar recordatorios por correo a los dueños de mascotas.';

    public function handle()
    {
        $now = Carbon::now();

        $reminders = Reminder::where('sent', false)
            ->where('remind_at', '<=', $now)
            ->with(['user', 'pet'])
            ->get();

        if ($reminders->isEmpty()) {
            $this->info("No hay recordatorios por enviar.");
            return Command::SUCCESS;
        }

        foreach ($reminders as $reminder) {
            $title = "Recordatorio: {$reminder->title}";
            $messageText = $reminder->notes ?? 'Tienes un recordatorio pendiente en PetCore Solutions.';
            $pet = $reminder->pet;

            try {
                Mail::to($reminder->user->email)
                    ->send(new RecordatorioMail($title, $messageText, $pet));

                $reminder->update(['sent' => true]);

                $this->info("Enviado correctamente a {$reminder->user->email}");
            } catch (\Exception $e) {
                $this->error("Error enviando a {$reminder->user->email}: " . $e->getMessage());
            }
        }

        return Command::SUCCESS;
    }
}
