<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\MonthlyReportReminderMail;
use App\Models\EmailSettingsDetails;
use Carbon\Carbon;


class SendMonthlyReportReminder extends Command
{
    protected $signature = 'email:monthly-report-reminder';
    protected $description = 'Send reminder email on last day of month';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */


    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $today = Carbon::now();

        // Only last day of month
        if (!$today->isLastOfMonth()) {
            return;
        }

        // Only send at 09:00
        if ($today->format('H:i') !== '09:00') {
            return;
        }

        // Fetch email from DB
        $emailSetting = EmailSettingsDetails::wherenull('deleted_by')->first();

        if (!$emailSetting) {
            $this->error('No email settings found.');
            return;
        }

        // dd($emailSetting);

        $emails = collect([
            $emailSetting->default_email,
            $emailSetting->email1,
            $emailSetting->email2,
            $emailSetting->email3,
        ])->filter()->toArray();

        Mail::to($emails)
            ->send(new \App\Mail\MonthlyReportReminderMail());

        $this->info('Monthly report reminder sent successfully.');
    }
}
