function unitCast() {
    var x;
    var y;
    var z;
    if(document.getElementById('dvd').checked) {
        x = "MB";
        y = "Please provide dvd-disc's capacity in MB";
        z = "[1-9]{1,}[0-9]{1,4}";
    }
    else if(document.getElementById('book').checked) {
        x = "KG";
        y = "Please provide book's weight in KG, with up to two decimals behind comma";
        z = "[0-9]{0,2}.?[0-9]{0,2}";
    }
    else if(document.getElementById('furniture').checked) {
        x = "HxWxL";
        y = "Please provide dimensions in HxWxL format";
        z = "[0-9]{1,3}x[0-9]{1,3}x[0-9]{1,3}";
    }
    document.getElementById('value').placeholder = x;
    document.getElementById('tooltip').title = y;
    document.getElementById('value').pattern = z;
}