document.addEventListener('DOMContentLoaded', function () {
    let count = 1;
    const inputContainer = document.getElementById("attributes_container");

    // remove attribute
    inputContainer.addEventListener('click', function (event) {
        let deleteAttrValue = event.target.classList.value;
        let deleteAttrs = document.querySelectorAll(`.${deleteAttrValue}`);
        if (event.target.classList.contains(deleteAttrValue)) {
        const parentAttributes = deleteAttrs[0].closest('.attributes');
        parentAttributes.remove();
        }
    });

    // append attribute onclick '+ Добавить атрибут'
    document.getElementById('attributeEvent').addEventListener('click', function () {
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
            <img class = "delete_attr${count}" src="../images/delete.png" alt="" srcset="">
        </div>`;

        inputContainer.appendChild(newInput);
        count++;
    });

    
});
