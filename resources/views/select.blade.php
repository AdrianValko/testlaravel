@include('nav')

@if($task)
    ID: {{$task->id}}<br>
    Uloha:{{$task->content}}<br>
    Zodpovedna osoba:{{$task->owner}}<br>
@else
    Uloha neexistuje
@endif
