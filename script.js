const CityElement = $('#city');
const TempElement = $('#temperatura span');
const DescricaoElement = $('#descricao');
const ClimaIcone = $('#icon-clima');
const CountryElement = $('#country');
const UmidadeElement = $('#umidade');
const VentoElement = $('#vento');
function EnviaDadosPost(data) {
    $.ajax({
        method: 'POST',
        data: $(data).serialize(),
        url: 'api.php'
    }).then
    {
        response => {
            console.log(response)
        }
    }
};
EnviaDadosPost();
