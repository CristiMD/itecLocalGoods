<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'category_id'
    ];

    protected $table = 'sub_categories';
    
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
    /*
    public function jobs(){
        return $this->hasMany(Job::class);
    }

    public function active_jobs(){
        return $this->hasMany(Job::class)->whereStatus(1);
    }


    public function getCategoryNameAttribute($value){
        $last_cached = (int) get_option('category_count_cached');
        $refresh_time = $last_cached + (60*60);
        if ($refresh_time < time()){
            $this->job_count = $this->active_jobs->count();
            $this->save();

            update_option('category_count_cached', time());
        }


        return $value;
    }



    
        public function job_count(){
            return $this->hasMany(Job::class)->whereStatus(1)->count();
        }*/
}
