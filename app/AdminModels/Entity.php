<?php


namespace App\AdminModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class Entity extends Model
{

    use HasFactory;

    protected $fillable = [
        'entity_parent',
        'entity_type',
        'entity_sub_type',
        'entity_creator',
        'entity_visible',
        'entity_creation_date',
        'entity_data_lang.edl_lang',
        'entity_user_id',
    ];




    public $timestamps = false;

    protected $primaryKey = 'entity_id';
    protected $LANG;

    public function __construct()
    {
        parent::__construct([]);
        $this->LANG = Session::get('LANG');

    }
    public function entityData() : HasOne {
        return $this->hasOne(EntityData::class, 'ed_entity', 'entity_id');
    }

    public function entityDataLang() : HasOne {
        return $this->HasOne(EntityDataLang::class, 'edl_entity', 'entity_id')
            ->where('edl_lang', $this->LANG);
    }

    public function entityGallery(): HasMany {
        return $this->HasMany(EntityGallery::class, 'eg_entity', 'entity_id');
    }

    public function entityOptions(): HasMany {
        return $this->HasMany(EntityOption::class, 'eo_entity', 'entity_id');
    }

    public function entityWords(): HasMany {
        return $this->HasMany(EntityWords::class, 'ew_entity', 'entity_id');
    }

    public function entitySeo(): HasOne {
        return $this->hasOne(EntitySeo::class, 'es_entity', 'entity_id')
            ->where('es_lang', $this->LANG);

    }

}
