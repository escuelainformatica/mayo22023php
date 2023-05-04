<form method="post">
    @csrf
<br>
<br><b>cache:</b>{{ $estacache }} <br />
<button name="refrescar" value="refrescar" type="submit">refrescar</button>
<br>
<table>
    <tr>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Marca</td>
    </tr>
    @foreach ($computadores as $computador)
        <tr>
            <td>{{ $computador->nombre }}</td>
            <td>{{ $computador->precio }}</td>
            <td>{{ $computador->marca }}</td>
        </tr>
    @endforeach

</table>
</form>
