<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestModel extends Model
{
    use HasFactory;
    protected $table = 'contest';
    public $timestamps = false;
    protected $fillable = [
                             'contest_name',
                             'contest_banner',
                             'prices',
                             'age_groups',
                             'contest_descripition',
                             'start_date',
                             'duration_date',
                             'end_date'
                           ];
}
