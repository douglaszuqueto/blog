<table class="table">
    <thead>
    <tr>
        <th width="60%">Titulo</th>
        <th width="20%" class="center-align"><i class="material-icons blue-text">alarm_on</i></th>
        <th width="20%" class="center-align">#</th>
    </tr>
    </thead>
    <tbody>
    @foreach($shedules as $row)
        <tr>
            <td width="60%">{{$row['article']}}</td>
            <td width="20%" class="center-align">{{$row['dt_shedule']}}</td>
            <td width="20%" class="center-align">
                <a href="">
                    <i class="material-icons red-text" title="Remover Agendamento">delete</i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>