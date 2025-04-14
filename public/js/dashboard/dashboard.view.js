$(document).ready(function() {
    const loginId = document.getElementById('loginId')?.value || '';

    $('#agenda').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        locale: 'pt-br',
        events: function(start, end, timezone, callback) {
            $.ajax({
                url: `/scheduling/list/${loginId}`,
                dataType: 'json',
                success: function(data) {
                    const events = data.map(event => ({
                        title: event.titulo,
                        start: event.data
                    }));
                    callback(events);
                },
                error: function(error) {
                    console.log('Erro ao carregar eventos:', error);
                }
            });
        },
        droppable: true,
        editable: true,
        eventColor: '#007bff',
        buttonText: {
            today: 'Hoje',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia'
        },
        events: function(start, end, timezone, callback) {
            $.ajax({
                url: `/scheduling/list/${loginId}`,
                dataType: 'json',
                success: function(data) {
                    const events = data.map(agendamento => {
                        return {
                            title: agendamento.titulo,
                            start: agendamento.data
                        };
                    });
                    callback(events);
                },
                error: function() {
                    alert('Erro ao carregar eventos!');
                }
            });
        }
    });
});