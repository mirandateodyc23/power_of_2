
let arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];

let result = isPower(arr);

console.log(result);

function isPower(arr) {

    let num = 0;
    let pow = 0;
    let pow_arr = [];
    let new_arr = [];
    let max = Math.max(...arr);

    while(pow < max) {
        pow = 2 ** num++;
        pow_arr.push(pow);
    }

    for (let key in arr) {
        if (pow_arr.includes(arr[key])) {
            new_arr[key] = 1;
        } else {
            new_arr[key] = 0;
        }
    }
    return new_arr;
}
