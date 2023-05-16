<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int    $id
 * @property int    $age
 * @property int    $motivation
 * @property string $nom
 * @property string $prenom
 * @property string $sexe
 * @property string $profession
 * @property string $rue
 * @property string $code_postal
 * @property string $ville
 * @property string $pays
 * @property string $email
 * @property string $telephone
 */
class Abonne extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    use HasFactory;
    protected $table = 'abonne';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'age', 'sexe', 'profession', 'rue', 'code_postal', 'ville', 'pays', 'email', 'telephone', 'motivation'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'nom' => 'string', 'prenom' => 'string', 'age' => 'int', 'sexe' => 'string', 'profession' => 'string', 'rue' => 'string', 'code_postal' => 'string', 'ville' => 'string', 'pays' => 'string', 'email' => 'string', 'telephone' => 'string', 'motivation' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
