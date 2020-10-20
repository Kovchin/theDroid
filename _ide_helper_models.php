<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Algoritm
 *
 * @property int $id
 * @property string|null $shortName
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\AlgoritmQuestion[] $questions
 * @property-read int|null $questions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm query()
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Algoritm whereUpdatedAt($value)
 */
	class Algoritm extends \Eloquent {}
}

namespace App{
/**
 * App\AlgoritmAnswer
 *
 * @property int $id
 * @property string $answer
 * @property int $algoritm_question_id
 * @property int|null $link_question_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer query()
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer whereAlgoritmQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer whereLinkQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmAnswer whereUpdatedAt($value)
 */
	class AlgoritmAnswer extends \Eloquent {}
}

namespace App{
/**
 * App\AlgoritmQuestion
 *
 * @property int $id
 * @property string|null $question
 * @property int|null $mainQuestion
 * @property int $algoritm_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Algoritm $algoritm
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\AlgoritmAnswer[] $answers
 * @property-read int|null $answers_count
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion whereAlgoritmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion whereMainQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AlgoritmQuestion whereUpdatedAt($value)
 */
	class AlgoritmQuestion extends \Eloquent {}
}

namespace App{
/**
 * App\Contract
 *
 * @property int $id
 * @property string $name
 * @property string $nickName
 * @property int $file_id
 * @property string|null $description
 * @property string|null $start
 * @property string|null $end
 * @property int $counterpartyA_id
 * @property int $counterpartyB_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Counterparty $counterpartyA
 * @property-read \App\Counterparty $counterpartyB
 * @property-read \App\File $files
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Sli[] $slis
 * @property-read int|null $slis_count
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCounterpartyAId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCounterpartyBId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereNickName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contract whereUpdatedAt($value)
 */
	class Contract extends \Eloquent {}
}

namespace App{
/**
 * App\Counterparty
 *
 * @property int $id
 * @property string $name
 * @property int|null $email_id
 * @property int|null $phone_id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Email|null $emails
 * @property-read \App\Phone|null $phones
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty query()
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty whereEmailId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty wherePhoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counterparty whereUpdatedAt($value)
 */
	class Counterparty extends \Eloquent {}
}

namespace App{
/**
 * App\Email
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Counterparty|null $counterpartys
 * @method static \Illuminate\Database\Eloquent\Builder|Email newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Email newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Email query()
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereUpdatedAt($value)
 */
	class Email extends \Eloquent {}
}

namespace App{
/**
 * App\File
 *
 * @property int $id
 * @property string $path
 * @property string $link
 * @property string|null $pathNickname
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File query()
 * @method static \Illuminate\Database\Eloquent\Builder|File whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File wherePathNickname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|File whereUpdatedAt($value)
 */
	class File extends \Eloquent {}
}

namespace App{
/**
 * App\Phone
 *
 * @property int $id
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Counterparty|null $counterpartys
 * @method static \Illuminate\Database\Eloquent\Builder|Phone newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone query()
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Phone whereUpdatedAt($value)
 */
	class Phone extends \Eloquent {}
}

namespace App{
/**
 * App\Sli
 *
 * @property int $id
 * @property string $name
 * @property int $number
 * @property string|null $duration
 * @property string|null $description
 * @property int $contracts_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Contract $contracts
 * @method static \Illuminate\Database\Eloquent\Builder|Sli newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sli newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sli query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sli whereContractsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sli whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sli whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sli whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sli whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sli whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sli whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sli whereUpdatedAt($value)
 */
	class Sli extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

