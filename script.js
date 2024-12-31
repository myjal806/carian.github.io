const daysContainer = document.getElementById('days');
const monthYear = document.getElementById('monthYear');
const prevMonth = document.getElementById('prevMonth');
const nextMonth = document.getElementById('nextMonth');
const startDateEl = document.getElementById('startDate');
const endDateEl = document.getElementById('endDate');
const confirmButton = document.getElementById('confirmButton');

let currentDate = new Date();
let selectedStartDate = null;
let selectedEndDate = null;

function renderCalendar() {
    daysContainer.innerHTML = '';
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const lastDateOfMonth = new Date(year, month + 1, 0).getDate();

    monthYear.textContent = `${currentDate.toLocaleString('es-ES', { month: 'long' })} ${year}`;

    const today = new Date();
    today.setHours(0, 0, 0, 0);

    // Días vacíos inicio mes
    for (let i = 0; i < firstDayOfMonth; i++) {
        const emptySlot = document.createElement('div');
        daysContainer.appendChild(emptySlot);
    }

    // Generar días del mes
    for (let day = 1; day <= lastDateOfMonth; day++) {
        const dayEl = document.createElement('div');
        dayEl.className = 'reserva-day';
        dayEl.textContent = day;

        const dayDate = new Date(year, month, day);

        if (dayDate < today) {
            dayEl.classList.add('unavailable');
            dayEl.style.cursor = 'not-allowed';
        }

        if (selectedStartDate && dayDate.getTime() === selectedStartDate.getTime()) {
            dayEl.classList.add('selected', 'range-start');
        }
        if (selectedEndDate && dayDate.getTime() === selectedEndDate.getTime()) {
            dayEl.classList.add('selected', 'range-end');
        }

        dayEl.addEventListener('click', () => {
            if (!dayEl.classList.contains('unavailable')) {
                if (!selectedStartDate || (selectedStartDate && selectedEndDate)) {
                    selectedStartDate = new Date(year, month, day);
                    selectedEndDate = null;
                    const llegadaPicker = document.querySelector("#fecha-llegada")._flatpickr;
                    llegadaPicker.setDate(selectedStartDate, true);
                } else if (!selectedEndDate) {
                    const tempEndDate = new Date(year, month, day);
                    if (tempEndDate > selectedStartDate) {
                        selectedEndDate = tempEndDate;
                        const salidaPicker = document.querySelector("#fecha-salida")._flatpickr;
                        salidaPicker.setDate(selectedEndDate, true);
                    }
                }
                updateSelectedDates();
                renderCalendar();
                highlightRange();
            }
        });

        daysContainer.appendChild(dayEl);
    }

    if (selectedStartDate && selectedEndDate) {
        highlightRange();
    }
}

function updateSelectedDates() {
    startDateEl.textContent = selectedStartDate
        ? selectedStartDate.toLocaleDateString('es-ES')
        : '--';
    endDateEl.textContent = selectedEndDate
        ? selectedEndDate.toLocaleDateString('es-ES')
        : '--';
    confirmButton.disabled = !selectedStartDate || !selectedEndDate;
}

function highlightRange() {
    if (!selectedStartDate || !selectedEndDate) return;

    const days = document.querySelectorAll('.reserva-day');
    const startDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    let dayCount = 0;

    days.forEach(dayEl => {
        if (dayEl.textContent) {
            const currentDay = new Date(startDay);
            currentDay.setDate(startDay.getDate() + dayCount);
            
            dayEl.classList.remove('selected', 'range-start', 'range-end', 'in-range');
            
            if (currentDay.getTime() === selectedStartDate.getTime()) {
                dayEl.classList.add('selected', 'range-start');
            }
            else if (currentDay.getTime() === selectedEndDate.getTime()) {
                dayEl.classList.add('selected', 'range-end');
            }
            else if (currentDay > selectedStartDate && currentDay < selectedEndDate) {
                dayEl.classList.add('in-range');
            }
            
            dayCount++;
        }
    });
}

// Event listeners
window.addEventListener('flatpickrLlegadaActualizada', function(e) {
    selectedStartDate = e.detail.fecha;
    currentDate = new Date(selectedStartDate);
    renderCalendar();
    updateSelectedDates();
    highlightRange();
});

window.addEventListener('flatpickrSalidaActualizada', function(e) {
    selectedEndDate = e.detail.fecha;
    renderCalendar();
    updateSelectedDates();
    highlightRange();
});

prevMonth.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

nextMonth.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});

// Estilos CSS
const styles = `
.reserva-day.range-start {
    background-color: #007bff;
    color: white;
}

.reserva-day.range-end {
    background-color: #007bff;
    color: white;
}

.reserva-day.in-range {
    background-color: #836947;
        background-color: #836947;
    color: white; /* Cambiado a blanco */
}
`;

const styleSheet = document.createElement("style");
styleSheet.innerText = styles;
document.head.appendChild(styleSheet);

// Inicializar calendario
renderCalendar();