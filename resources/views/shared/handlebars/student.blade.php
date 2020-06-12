<script id="student-template" type="text/x-handlebars-template">
    <a href="{{ url('students/show') }}/@{{ slug }}" class="row">
        <div class="cardstud">
            <div class="cardstud-info">
                <img src="@{{ img }}" alt=" @{{ nome}}" class="card-img" alt="...">
                <ul>
                    <li>
                        <h3> @{{ nome}} (@{{eta}} anni)</h3>
                    </li>
                    <li>
                        <h4>
                           @{{ assunzione }} da @{{azienda}} come @{{ ruolo }}
                        </h4>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="cardstud-descr">
                    <p class="description">@{{ descrizione }}</p>
                </div>
            </div>
        </div>
    </a>
</script>