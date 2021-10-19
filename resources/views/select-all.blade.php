@include('nav')

@if(count($tasks)>0)
    <table>
        <tr>
            <td>ID</td>
            <td>Uloha</td>
            <td>Priradena</td>
            <td>Datum vytvorenia</td>
        </tr>
        @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->content}}</td>
                <td>{{$task->owner}}</td>
                <td>{{$task->created_at}}</td>
                <td><a href="{{route('select',['id'=>$task->id])}}">Detail</a></td>
                <td><a href="{{route('delete',['id'=>$task->id])}}">Vymazat</a></td>
                <td><a href="{{route('update-form',['id'=>$task->id])}}">Aktualizovat</a></td>
            </tr>
        @endforeach
    </table>
@else
    Neexistuju ziadne ulohy
@endif
