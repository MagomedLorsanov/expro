document.addEventListener('DOMContentLoaded', function () {
    let count = 0;

    document.getElementById('attributeEvent').addEventListener('click', function () {
        
        const inputContainer = document.getElementById("attributes_container");
        const newInput = document.createElement('div');

        newInput.classList.add('attributes');
        newInput.innerHTML =`
        <div class="attribute">
            <label class='product_title'>Название</label>
            <input type="text" name="attr${count}" />
        </div>
        <div class="attribute attribute_value">
            <label class='product_title'>Значение</label>
            <input type="text" name="value${count}" />
        </div>
        <div class="basket">
            <img src="../images/delete.png" alt="" srcset="">
        </div>`;

        inputContainer.appendChild(newInput);
        count++;
    });
});
