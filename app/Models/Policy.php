<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Policy
 *
 * @property int $id
 * @property string $applicant_name
 * @property string $insured_name
 * @property string $policy_no
 * @property string $product_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Policy extends Model
{
	protected $table = 'policies';

	protected $fillable = [
		'applicant_name',
		'insured_name',
		'policy_no',
		'product_name'
	];
}
