<?php

namespace App\Models;

use App\Models\Data\District;
use App\Observers\StudentObserver;
use App\Traits\EntityTrait;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use SplFileInfo;



/**
 * @property int $admission_level_id
 * @property int $admission_category_id
 * @property int $district_id
 * @property int $id
 * @property string $code
 * @property string $full_name_en
 * @property string|null $full_name_si
 * @property string $name_initials_en
 * @property string|null $name_initials_si
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string|null $religion
 * @property Carbon|null $DOB
 * @property string $address
 * @property string $city
 * @property string $present_address
 * @property string $present_city
 * @property string $correspondence_address
 * @property string $medium
 * @property string|null $image
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAdmissionCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereAdmissionLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCorrespondenceAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereDOB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereDistrictId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFullNameEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereFullNameSi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereLeftOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereMedium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNameInitialsEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNameInitialsSi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePresentAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student wherePresentCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereRegisteredOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereReligion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereUpdatedAt($value)
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Document> $documents
 * @property-read int|null $documents_count
 * @property string $nationality
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereNationality($value)
 *
 * @property Carbon|null $registered_on
 * @property Carbon|null $left_on Student left the school on this day
 * @property Carbon|null $deleted_at
 * @property-read \App\Models\AdmissionCategory $admissionCategory
 * @property-read \App\Models\AdmissionLevel $admissionLevel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Student onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Student whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Student withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Student withoutTrashed()
 *
 * @property-read District $district
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Guardian> $guardians
 * @property-read int|null $guardians_count
 * @property-read mixed $mail_communication
 *
 * @mixin \Eloquent
 */
#[ObservedBy([StudentObserver::class])]
class Student extends Model
{
    use HasFactory;
    use EntityTrait;
    use SoftDeletes;
}
