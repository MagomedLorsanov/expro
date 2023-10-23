document.addEventListener("DOMContentLoaded", function () {
    let count = 1;
    let modalClass = document.querySelector(".modal");
    const inputContainer = document.getElementById("attributes_container");
    const attributeEvent = document.getElementById("attributeEvent");
    const createModal = document.getElementById("ModalCreate");

    // remove attribute
    if (inputContainer != null) {
        inputContainer.addEventListener("click", function (event) {
            let deleteAttrValue = event.target.classList.value;
            let deleteAttrs = document.querySelectorAll(`.${deleteAttrValue}`);
            if (event.target.classList.contains(deleteAttrValue)) {
                console.log("---s");
                const parentAttributes = deleteAttrs[0].closest(".attributes");
                parentAttributes.remove();
            }
        });
    }

    // append attribute onclick '+ Добавить атрибут'
    if (attributeEvent) {
        attributeEvent.addEventListener("click", function () {
            const newInput = document.createElement("div");
            newInput.classList.add("attributes");

            newInput.innerHTML = `
        <div class="attribute">
            <label class='product_title'>Название</label>
            <input type="text" name="keys[]" />
        </div>
        <div class="attribute attribute_value">
            <label class='product_title'>Значение</label>
            <input type="text" name="values[]" />
        </div>
        <div class="basket">
            <img class = "delete_attr${count}" src="/../images/delete_atr.svg">
        </div>`;

            inputContainer.appendChild(newInput);
            count++;
        });
    }
    // document.querySelector(".btn_add").addEventListener("click", function(){
    //     createModal.style.opacity = "1";
    //     modalClass.style.display = "block";
    //     modalClass.style.position = "unset";
    // })

    document.querySelector(".close").addEventListener("click", function () {
        window.location = window.location.origin + "/products";
    });

    // // retrive data for show product
    // $(document).on('click','.product', function(){

    //     let product_id = $(this).attr('id');
    //     let url = window.location.href;
    //     $('#modalShow').opacity= "1";
    //     $(this).show();
    //     modalClass.style.position = "unset";
    //     $.get(url + product_id, function (data) {
    //         console.log(data)

    //     })
    // })
});

// delete product
function deleteProduct() {
    if (confirm("Вы уверены что хотите удалить этот продукт?")) {
        document.getElementById("deleteForm").submit();
    }
}
