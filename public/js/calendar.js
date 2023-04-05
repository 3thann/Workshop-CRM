import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import listPlugin from '@fullcalendar/list';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    
    var calendar = new Calendar(calendarEl, {
        plugins: [ dayGridPlugin, timeGridPlugin, listPlugin ],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        events: [
            {
                title: 'Event 1',
                start: '2023-04-05T10:00:00',
                end: '2023-04-05T12:00:00'
            },
            {
                title: 'Event 2',
                start: '2023-04-07T14:00:00',
                end: '2023-04-07T16:00:00'
            }
        ]
    });

    calendar.render();
});