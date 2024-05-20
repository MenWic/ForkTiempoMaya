document.addEventListener('DOMContentLoaded', () => {
    const tzolkinCircle = document.getElementById('tzolkinCircle');
    const numerosCircle = document.getElementById('numerosCircle');
    const currentTzolkinLabel = document.getElementById('currentTzolkin');
    const currentNumeroLabel = document.getElementById('currentNumero');
    const tolerance = 10;
    const updateCurrentSymbol = (elements, label, type) => {
        const topElement = Array.from(elements).find(element => {
            const angle = parseFloat(element.getAttribute('data-angle')) % 360;
            return Math.abs(angle) <= tolerance || Math.abs(angle - 360) <= tolerance || Math.abs(angle - 0.30769230768999023) <= tolerance;
        });

        if (topElement) {
            const img = topElement.querySelector('img');
            label.textContent = type === 'tzolkin' ? `Dia: ${img.alt}` : `Mes: ${img.alt}`;
        }
    };

    const rotateElements = (elements, angleIncrement, radius, label, type) => {
        elements.forEach(element => {
            let currentAngle = parseFloat(element.getAttribute('data-angle'));
            let newAngle = currentAngle + angleIncrement;
            element.style.transform = `rotate(${newAngle}deg) translate(0, -${radius}px) rotate(-${newAngle}deg)`;
            element.setAttribute('data-angle', newAngle);
        });

        updateCurrentSymbol(elements, label, type);
        updateCurrentSymbol(numerosCircle.querySelectorAll('.numero'), currentNumeroLabel, 'numero');
    };

    tzolkinCircle.addEventListener('click', () => {
        const tzolkinSignos = tzolkinCircle.querySelectorAll('.tzolkin-signo');
        rotateElements(tzolkinSignos, 18, 250, currentTzolkinLabel, 'tzolkin');
    });

    numerosCircle.addEventListener('click', () => {
        const numeros = numerosCircle.querySelectorAll('.numero');
        rotateElements(numeros, 28, 150, currentNumeroLabel, 'numero');
    });

    // Inicializamos los labels con los valores iniciales
    updateCurrentSymbol(tzolkinCircle.querySelectorAll('.tzolkin-signo'), currentTzolkinLabel, 'tzolkin');
    updateCurrentSymbol(numerosCircle.querySelectorAll('.numero'), currentNumeroLabel, 'numero');
});
