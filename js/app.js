const switcher = document.getElementById("productType");
const container = document.getElementById("switch");
const sku = document.getElementById("sku");
const save_btn = document.getElementById("save");
const product_form = document.getElementById("product_form");
const error = document.getElementById("error");

function switchType() {
    if (switcher.value == "DVD") {
        container.innerHTML = `
        <div id="dvd">
            <div class="form-group d-flex grid gap-4">
                <h5>Size(MB): </h5>
                <input type="text" name="size" id="size" placeholder="E.g: 300" class="form-control" required />
            </div><br>
            <p>*Please provide the product size</p>
        </div>
        `;
    }else if (switcher.value == "Book") {
        container.innerHTML = `
        <div id="book">
            <div class="form-group d-flex grid gap-4">
                <h5>Weight(Kg): </h5>
                <input type="text" name="weight" id="weight" placeholder="E.g: 6" class="form-control" required />
            </div><br>
            <p>*Please provide the product weight</p>
        </div>
        `;
    }else if (switcher.value == "Furniture") {
        container.innerHTML = `
        <div id="furniture">
            <div class="form-group d-flex grid gap-4">
                 <h5>Height(CM): </h5>
                 <input type="text" name="height" id="height" placeholder="E.g: 12" class="form-control" required />
            </div><br>
            <div class="form-group d-flex grid gap-4">
                <h5>Width(CM): </h5>
                <input type="text" name="width" id="width" placeholder="E.g: 18" class="form-control" required />
            </div><br>
            <div class="form-group d-flex grid gap-4">
                <h5>Length(CM): </h5>
                <input type="text" name="length" id="length" placeholder="E.g: 9" class="form-control" required />
            </div><br>
            <p>*Please provide the product dimensions HxWxL</p>
        </div>
        `;
    }
}
