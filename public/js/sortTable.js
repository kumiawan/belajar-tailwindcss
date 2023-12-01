  document.addEventListener("DOMContentLoaded", function () {
    function sortTable(column) {
      const table = document.querySelector("table");
      const rows = Array.from(table.rows).slice(1); // Skip the header row
      const isNumeric = column === 'absen';

      rows.sort((a, b) => {
        const aValue = isNumeric ? parseInt(a.cells[column].dataset.absen, 10) : a.cells[column].textContent;
        const bValue = isNumeric ? parseInt(b.cells[column].dataset.absen, 10) : b.cells[column].textContent;

        return aValue.localeCompare(bValue, undefined, { numeric: true });
      });

      rows.forEach(row => table.appendChild(row));
    }

    window.sortTable = sortTable; // Expose the function globally
  });
