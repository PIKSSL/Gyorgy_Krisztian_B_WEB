
class SzotarModel{
    #szavak;
    constructor(){
        this.#szavak = [];
    }


    get(vegpont, callback) {
        fetch(vegpont, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        })
            .then(response => response.json())
            .then(data => {
                this.#szavak = data;
                console.log(this.#szavak);
                callback(this.#szavak);
            }
                
            )
            
            .catch((error) => {
                console.error("Error:", error);
            });
    }
}

export default SzotarModel;