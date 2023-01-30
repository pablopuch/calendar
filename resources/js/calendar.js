document.addEventListener('DOMContentLoaded', function() {

    let form = document.querySelector("form");

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

      initialView: 'dayGridMonth',
      locale:"es",

      displayEventTime: false,

      headerToolbar:{
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek'
      },

      events: '/show',
      dateClick:function(info){
        form.reset();
        form.start.value=info.dateStr;
        form.end.value=info.dateStr;
        $('#event').modal("show");
      },

      eventClick: function (info){
        var event=info.event;
        console.log(event);
        axios.post(newURL + '/reload/'+info.event.id).then(
            (res) =>{

                form.id.value=res.data.id;
                form.title.value=res.data.title;
                form.description.value=res.data.description;
                form.start.value=res.data.start;
                form.end.value=res.data.end;

                $('#event').modal('show');
            }
        ).catch(
            error=>{
                if(error.response){
                    console.log(error.response.data);
                }
            }
        )
      }


    });
    calendar.render();

    document.getElementById('btnSave').addEventListener('click',function(){
        enviarDatos('/save');
    });

    document.getElementById('btnEdit').addEventListener('click',function(){
        enviarDatos('/edit/'+form.id.value);
    });

    document.getElementById('btnDelete').addEventListener('click',function(){
        enviarDatos('/delete/'+form.id.value);
    });

    function enviarDatos(url){

        const data = new FormData(form);
        const newURL = baseURL + url;
        axios.post(newURL, data).then(
            (res) =>{
                calendar.refetchEvents();
                $('#event').modal('hide');
            }
        ).catch(
            error=>{
                if(error.response){
                    console.log(error.response.data);
                }
            }
        )

    }




  });