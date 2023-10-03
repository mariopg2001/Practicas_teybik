<?php
return [

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

"accepted"=> "Este campo debe ser aceptado.",
"accepted_if"=> "Este campo debe ser aceptado cuando :other sea :value.",
"active_url"=> "Este campo debe ser una URL válida.",
"after"=> "Debe ser una fecha después de :date.",
"after_or_equal"=> "Debe ser una fecha después o igual a :date.",
"alpha"=> "Este campo solo puede contener letras.",
"alpha_dash"=> "Este campo solo puede contener letras, números, guiones y guiones bajos.",
"alpha_num"=> "Este campo solo puede contener letras y números.",
"array"=>"Este campo debe ser un array (colección).",
"ascii"=>"Este campo solo debe contener caracteres alfanuméricos y símbolos de un solo byte.",
"attached"=> "Este campo ya se adjuntó.",
"before"=> "Debe ser una fecha antes de :date.",
"before_or_equal"=> "Debe ser una fecha anterior o igual a :date.",
"between.array"=> "El contenido debe tener entre :min y :max elementos.",
"between.file"=> "Este archivo debe ser entre :min y :max kilobytes.",
"between.numeric"=> "Este valor debe ser entre :min y :max.",
"between.string"=> "El texto debe ser entre :min y :max caracteres.",
"boolean"=> "El campo debe ser verdadero o falso.",
"can"=> "Este campo contiene un valor no autorizado.",
"confirmed"=> "La confirmación no coincide.",
"country"=> "Este campo no es un país válido.",
"date"=> "Este campo debe ser una fecha válida.",
"date_equals"=> "El campo debe ser una fecha igual a :date.",
"date_format"=> "El campo debe coincidir con el formato :format.",
"decimal"=> "Este campo debe tener :decimal cifras decimales.",
"declined"=> "Este campo debe ser rechazado.",
"declined_if"=> "Este campo debe ser rechazado cuando :other sea :value.",
"different"=> "Este valor deben ser diferente de :other.",
"digits"=> "Debe tener :digits dígitos.",
"digits_between"=> "Debe tener entre :min y :max dígitos.",
"dimensions"=> "Las dimensiones de esta imagen son inválidas.",
"distinct"=> "El campo tiene un valor duplicado.",
"doesnt_end_with"=> "Este campo no debe finalizar con uno de los siguientes: :values.",
"doesnt_start_with"=> "Este campo no debe comenzar con uno de los siguientes: :values.",
"email"=> "No es un correo válido.",
"ends_with"=> "Debe finalizar con uno de los siguientes valores: :values.",
"enum"=> "El valor seleccionado es inválido.",
"exists"=> "El valor seleccionado es inválido.",
"file"=> "El campo debe ser un archivo.",
"filled"=> "Este campo debe tener un valor.",
"gt.array"=> "El contenido debe tener mas de :value elementos.",
"gt.file"=> "El archivo debe ser mayor que :value kilobytes.",
"gt.numeric"=> "El valor del campo debe ser mayor que :value.",
"gt.string"=> "El texto debe ser mayor de :value caracteres.",
"gte.array"=> "El contenido debe tener :value elementos o más.",
"gte.file"=> "El tamaño del archivo debe ser mayor o igual que :value kilobytes.",
"gte.numeric"=> "El valor debe ser mayor o igual que :value.",
"gte.string"=> "El texto debe ser mayor o igual de :value caracteres.",
"image"=> "Esta debe ser una imagen.",
"in"=> "El valor seleccionado es inválido.",
"in_array"=> "Este valor debe existir en :other.",
"integer"=> "Esto debe ser un entero.",
"ip"=> "Debe ser una dirección IP válida.",
"ipv4"=> "Debe ser una dirección IPv4 válida.",
"ipv6"=> "Debe ser una dirección IPv6 válida.",
"json"=> "Debe ser un texto válido en JSON.",
"lowercase"=> "Este campo debe estar en minúscula.",
"lt.array"=> "El contenido debe tener menor de :value elementos.",
"lt.file" => "El tamaño del archivo debe ser menor a :value kilobytes.",
"lt.numeric"=> "El valor debe ser menor que :value.",
"lt.string"=> "El texto debe ser menor de :value caracteres.",
"lte.array"=> "El contenido no debe tener más de :value elementos.",
"lte.file"=> "El tamaño del archivo debe ser menor o igual que :value kilobytes.",
"lte.numeric"=> "El valor debe ser menor o igual que :value.",
"lte.string"=> "El texto debe ser menor o igual de :value caracteres.",
"mac_address"=> "El valor debe ser una dirección MAC válida.",
"max.array"=> "El contenido no debe tener más de :max elementos.",
"max.file"=> "El tamaño del archivo no debe ser mayor a :max kilobytes.",
"max.numeric"=> "El valor no debe ser mayor de :max.",
"max.string"=> "El texto no debe ser mayor a :max caracteres.",
"max_digits"=> "Este campo no debe tener más de :max dígitos.",
"mimes"=> "Debe ser un archivo de tipo: :values.",
"mimetypes"=> "Debe ser un archivo de tipo: :values.",
"min.array"=> "El contenido debe tener al menos :min elementos.",
"min.file"=> "El tamaño del archivo debe ser al menos de :min kilobytes.",
"min.numeric"=> "El valor debe ser al menos de :min.",
"min.string"=> "El texto debe ser al menos de :min caracteres.",
"min_digits"=> "Este campo debe tener al menos :min dígitos.",
"missing"=> "Este campo no debe estar presente.",
"missing_if"=> "Este campo no debe estar presente cuando :other sea :value.",
"missing_unless"=> "Este campo no debe estar presente a menos que :other sea :value.",
"missing_with"=> "Este campo no debe estar presente si alguno de los campos :values está presente.",
"missing_with_all"=> "Este campo no debe estar presente cuando los campos :values estén presentes.",
"multiple_of"=> "Este valor debe ser múltiplo de :value",
"not_in"=> "El valor seleccionado es inválido.",
"not_regex"=> "Este formato es inválido.",
"numeric"=> "Debe ser un número.",
"password.letters"=> "Este campo debe contener al menos una letra.",
"password.mixed"=> "Este campo debe contener al menos una letra mayúscula y una minúscula.",
"password.numbers"=> "Este campo debe contener al menos un número.",
"password.symbols"=> "Este campo debe contener al menos un símbolo.",
"password.uncompromised"=> "El texto ingresado se ha visto comprometido en una filtración de datos (data leak). Elija uno distinto.",
"present"=> "Este campo debe estar presente.",
"prohibited"=> "Este campo está prohibido",
"prohibited_if"=> "Este campo está prohibido cuando :other es :value.",
"prohibited_unless"=> "Este campo está prohibido a menos que :other sea :values.",
"prohibits"=> "Este campo prohibe que :other esté presente.",
"regex"=> "Este formato es inválido.",
"relatable"=> "Este campo no se puede asociar con este recurso.",
"required"=> "Este campo es requerido.",
"required_array_keys"=> "Este campo debe contener entradas para: :values.",
"required_if"=> "Este campo es requerido cuando :other es :value.",
"required_if_accepted"=> "Este campo es obligatorio si :other es aceptado.",
"required_unless"=> "Este campo es requerido a menos que :other esté en :values.",
"required_with"=> "Este campo es requerido cuando :values está presente.",
"required_with_all"=> "Este campo es requerido cuando :values están presentes.",
"required_without"=> "Este campo es requerido cuando :values no está presente.",
"required_without_all"=> "Este campo es requerido cuando ninguno de :values están presentes.",
"same"=> "Este campo y :other deben coincidir.",
"size.array"=> "El contenido debe tener :size elementos.",
"size.file"=> "El tamaño del archivo debe ser de :size kilobytes.",
"size.numeric"=> "El valor debe ser :size.",
"size.string"=> "El texto debe ser de :size caracteres.",
"starts_with"=> "Debe comenzar con alguno de los siguientes valores: :values.",
"string"=> "Debe ser un texto.",
"timezone"=> "Debe ser de una zona horaria válida.",
"ulid"=> "Debe ser un ULID válido.",
"unique"=> "Este campo ya ha sido tomado.",
"uploaded"=>"Falló al subir.",
"uppercase"=> "Este campo debe estar en mayúscula.",
"url"=> "Debe ser una URL válida.",
"uuid"=> "Debe ser un UUID válido.",

/*
|--------------------------------------------------------------------------
| Custom Validation Language Lines
|--------------------------------------------------------------------------
|
| Here you may specify custom validation messages for attributes using the
| convention "attribute.rule" to name the lines. This makes it quick to
| specify a specific custom language line for a given attribute rule.
|
*/

'custom' => [
    'attribute-name' => [
        'rule-name' => 'custom-message',
    ],
],

/*
|--------------------------------------------------------------------------
| Custom Validation Attributes
|--------------------------------------------------------------------------
|
| The following language lines are used to swap our attribute placeholder
| with something more reader friendly such as "E-Mail Address" instead
| of "email". This simply helps us make our message more expressive.
|
*/

'attributes' => [],

];
