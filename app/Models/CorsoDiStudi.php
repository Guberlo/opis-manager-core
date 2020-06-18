<?php

namespace App\Models;

use App\Models\Dipartimento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class CorsoDiStudi extends Model
{
    /**
     * Campi assegnati massivamente 
     * 
     * @var Array 
     */
    protected $fillable = ['unict_id', 'nome', 'classe', 'anno_accademico', 'id_dipartimento']; 

    /**
     * Tabella referenziata dal modello
     * 
     * @var string
     */
    protected $table = 'corso_di_studi'; 

    /**
     * Flag referente i timestamps nelle tabelle
     * 
     * @var bool
     */
    public $timestamps = false; 

    /**
     * Ritorna il dipartimento a cui il cds è associato
     *
     * @return Relation
     */
    public function dipartimento(): Relation
    {
        return $this->belongsTo('App\Models\Dipartimento', 'id_dipartimento');
    }
    
    /**
     * Ritorna tutti gli insegnamenti associati al cds
     *
     * @return Relation
     */
    public function insegnamenti(): Relation
    {
        return $this->hasMany('App\Models\Insegnamento', 'id_cds');
    }

}
