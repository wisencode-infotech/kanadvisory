document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('add-benefit').addEventListener('click', function() {
        var benefitFields = document.getElementById('benefit-fields');
        var index = benefitFields.children.length; // Get the current number of benefit fields

        var newBenefit = document.createElement('div');
        newBenefit.className = 'benefit-field';
        newBenefit.innerHTML = `
            <h4>Benefit ${index + 1}</h4>
            <p><label for="benefit_title_${index}">Benefit Title:</label></p>
            <input type="text" id="benefit_title_${index}" name="benefits[${index}][title]" value="" size="50" />
            <p><label for="benefit_description_${index}">Benefit Description:</label></p>
            <textarea id="benefit_description_${index}" name="benefits[${index}][description]" rows="4" cols="50"></textarea>
            <button type="button" class="button remove-benefit">Remove Benefit</button>
        `;
        benefitFields.appendChild(newBenefit);
    });

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-benefit')) {
            event.target.closest('.benefit-field').remove();
        }
    });
});