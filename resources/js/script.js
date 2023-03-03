window.addEventListener("load", (event) => {
    window.Echo.channel('public-currency-updates')
        .listen('App\\Events\\CurrencyDataFetched', (data) => {
            renderTable(data);
        });

});
const renderTable = (currencyData) => {
    const tbody = document.getElementById('currency-data');
    currencyData.forEach((currency) => {
        const row = document.createElement('tr');
        const currencyName = `${currency.currencyCodeA}/${currency.currencyCodeB}`;

        const currencyCell = document.createElement('td');
        currencyCell.textContent = currencyName;
        row.appendChild(currencyCell);

        const buyCell = document.createElement('td');
        buyCell.textContent = currency.rateBuy.toFixed(2);
        row.appendChild(buyCell);

        const crossCell = document.createElement('td');
        crossCell.textContent = currency.rateCross.toFixed(2);
        row.appendChild(crossCell);

        const sellCell = document.createElement('td');
        sellCell.textContent = currency.rateSell.toFixed(2);
        row.appendChild(sellCell);

        const dateCell = document.createElement('td');
        dateCell.textContent = formatDate(currency.date);
        row.appendChild(dateCell);

        tbody.appendChild(row);
    });
};

// Function to format date
const formatDate = (timestamp) => {
    const date = new Date(timestamp * 1000);
    return date.toLocaleString();
};
