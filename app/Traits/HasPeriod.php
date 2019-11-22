<?php

namespace App\Traits;
use Carbon\Carbon;

trait HasPeriod {

    public function getCarbonBeginsAtAttribute()
    {
        if(is_null($this->begins_at)){ return null; }
        return Carbon::createFromFormat('d/m/Y', $this->begins_at);
    }

    public function getCarbonEndsAtAttribute($ends_at)
    {
        if(is_null($this->ends_at)){ return null; }
        return Carbon::createFromFormat('d/m/Y', $this->ends_at);
    }

    public function getStatusAttribute()
    {
        $now = Carbon::now();
        if ($now->lessThan($this->carbon_begins_at)) {
            return 'future';
        } elseif ($now->greaterThan($this->carbon_ends_at)) {
            return 'past';
        } else {
            return 'current';
        }
    }

    public function getBadgeAttribute()
    {
        switch($this->status){
            case 'future' : $badge = 'warning'; $text = 'À venir'; break;
            case 'past'   : $badge = 'secondary'; $text = 'Terminé'; break;
            case 'current': $badge = 'success'; $text = 'En cours';
        }

        return "<span class=\"badge badge-$badge\">$text</span>";
    }
}
