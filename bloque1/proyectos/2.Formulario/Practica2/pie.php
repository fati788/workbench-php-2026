   <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mi pagina 2025</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

 <!-- Modal Eliminar todos los Proyectos -->
  <div class="modal fade" id="eliminarProyectos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Proyectos</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <form action="controlador.php" method="POST" id="fep">
                     <div class="form-group">
                         <label class="form-label">¿Estás seguro de borrar todos los proyectos?</label>
                     </div>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                 <button type="submit" class="btn btn-primary" name="accion" value="eliminarTodo" form="fep">Sí</button>
             </div>
         </div>
     </div>
 </div>
   <!-- Modal para Añadir un Proyecto  -->

  <div class="modal fade" id="anadirProyecto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="text-center mb-4 text-primary" id="exampleModalLabel">Añadir Proyectos</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

        <form action="controlador.php" method="POST" class="p-4 border rounded shadow bg-white" id="fap">
        
        <div class="mb-3">
          <label for="nombre" class="form-label fw-semibold">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del proyecto">
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="fechaIni" class="form-label fw-semibold">Fecha de Inicio</label>
            <input type="date" name="fechaIni" id="fechaIni" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="fechaFinPrevista" class="form-label fw-semibold">Fecha de Fin Prevista</label>
            <input type="date" name="fechaFinPrevista" id="fechaFinPrevista" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="diasTranscurridos" class="form-label fw-semibold">Días Transcurridos</label>
            <input type="number" name="diasTranscurridos" id="diasTranscurridos" class="form-control"  min="0" placeholder="0">
          </div>
          <div class="col-md-6 mb-3">
            <label for="porcentageCompletado" class="form-label fw-semibold">Porcentaje Completado</label>
            <input type="number" name="porcentageCompletado" id="porcentageCompletado" class="form-control"  min="0" placeholder="0">
          </div>
        </div>

        <div class="mb-4">
          <label for="importancia" class="form-label fw-semibold">Importancia</label>
         <input type="number" name="importancia" id="importancia" class="form-control" placeholder="1-5" max="5" min="1">
        </div>
      </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button class="btn btn-primary btn-lg" type="submit" name="accion" value="nuevo" form="fap">
            <i class="bi bi-plus-circle"></i> Crear Proyecto
          </button>
         </div>
     </div>
 </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="./js/bootstrap.min.js"></script>
 <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>