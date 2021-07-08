    </section>

      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

     <!-- Jquery JS-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script type="text/javascript" src="assets/js/jquery.mask.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){
          $('#cep').mask('00.000-00');
          $('#cpf').mask('000.000.000-00', {reverse: true});
          $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
          $('#data').mask('00/00/0000', {placeholder: '  /  /    '});
        });
     </script>
</body>
</html>
