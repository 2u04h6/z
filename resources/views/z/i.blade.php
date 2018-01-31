zzzz<p>
<a href="<?php echo route('q.show',['id'=>12])?>">q</a>
<form action="/z" method="POST">
    {{ csrf_field() }}
    <input type="text" name="idd" placeholder="..." />
    <input type="text" name="nam" placeholder="..." />
    <input type="submit">
</form>
@foreach($z as $i)
<p>xx{{$i->idd}}
@endforeach