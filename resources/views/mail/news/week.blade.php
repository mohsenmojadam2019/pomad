@component('mail::message')
# Introduction

سلام داوطلب عزیز روز جمعه  1399/12/12 همایش انلاین برگزار می شود

@component('mail::button', ['url' => ''])
 کلیک کنید
@endcomponent

مرکز پوردستمالچی<br>
{{ config('app.name') }}
@endcomponent
