<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class ResetApiCountCommand extends Command
{
    /**
     * Nom et signature de la commande.
     *
     * @var string
     */
    protected $signature = 'api:reset';

    /**
     * Description de la commande.
     *
     * @var string
     */
    protected $description = "";

    /**
     * Exécute la commande.
     *
     * @return int
     */
    public function handle()
    {
        $path = storage_path('app/api_count.json');
        $content = file_get_contents($path);

        $data = json_decode($content, true);

        $now = Carbon::now();
        $lastClearedAt = isset($data['cleared_at']) ? Carbon::parse($data['cleared_at']) : null;
        if ($now->day === 3 && (!$lastClearedAt || !$now->isSameDay($lastClearedAt))) {

            $data['map_box'] = 0;

            $data['cleared_at'] = $now->toDateTimeString();

            $content = json_encode($data);

            file_put_contents($path, $content);

            $this->info('Le compteur d\'API a été réinitialisé.');
        } else {
            $this->info('Aucune réinitialisation de compteur d\'API n\'a été effectuée.');
        }

        return 0;
    }
}
