// crero un objeto de tip DataTable con parametros del id de la referencia y un objeto con configuraciones

let table = new DataTable('#tabla_id', {
  // options
  // opcion de configuración
  pageLength: 3,
  lengthMenu: [
    [3, 10, 25, 50],
    [3, 10, 25, 50],
  ],
  language: {
    url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json',
  },
});
