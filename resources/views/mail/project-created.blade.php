@component('mail::message')
# New Project: {{ $project->heading }}

{{$project->information}}

@component('mail::button', ['url' => url('/projects/'. $project->id)])
View Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
