<header class="d-flex flex-column">
    <div>

    </div>
        <div class="d-flex">
            <span class="fw-bold">Azienda</span>
            <span class="fw-bold">Stazione_di_Partenza</span>
            <span class="fw-bold">Stazione_di_Arrivo</span>
            <span class="fw-bold">Orario_di_Partenza</span>
            <span class="fw-bold">Orario_di_Arrivo</span>
            <span class="fw-bold">Codice_Treno</span>
            <span class="fw-bold">Numero_Carrozze</span>
        </div>
    @foreach ($train as $element)
        <div class="d-flex">
                <span>{{$element->Azienda}}</span>
                <span>{{$element->Stazione_di_Partenza}}</span>
                <span>{{$element->Stazione_di_Arrivo}}</span>
                <span>{{$element->Orario_di_Partenza}}</span>
                <span>{{$element->Orario_di_Arrivo}}</span>
                <span>{{$element->Codice_Treno}}</span>
                <span>{{$element->Numero_Carrozze}}</span>

        </div>
    @endforeach
</header>
