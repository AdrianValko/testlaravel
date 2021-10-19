@include('nav')

<form method="post" action="{{ route('update') }}">
    Uloha:<br>
    <input type="text" name="content" value="{{ $task->content }}"><br>
    Zodpovedna osoba:<br>
    <input type="text" name="owner" value="{{ $task->owner }}"><br>
    <input type="hidden" name="id" value="{{ $task->id }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Aktualizovat">
</form>
