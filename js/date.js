var days = 'sunday,monday,tuesday,wednesday,thursday,friday,saturday'.split(',');

document.getElementById( days[(new Date()).getDay()] ).classList.add('bold');