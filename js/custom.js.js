var slider = document.getElementById('slider');

noUiSlider.create(slider, {
    start: [20, 500],
    connect: true,
    range: {
        'min': 0,
        'max': 550
    }
});