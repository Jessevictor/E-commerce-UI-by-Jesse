<!-- Click-only FAB html from http://materializecss.com/buttons.html  -->
<div class="fixed-action-btn horizontal click-to-toggle spin-close">
    <a class="btn-floating btn-large red">
      <i class="material-icons">edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
<style>

$fab-close-line-length: 1.64rem;
$fab-close-line-thickness: 2px;
$fab-close-animation-time: .3s;
$fab-close-spins: 1;


.fixed-action-btn{
  &.spin-close{
    .btn-large {
      position: relative;
      i {
        opacity: 1;
        transition: transform $fab-close-animation-time,
      opacity $fab-close-animation-time;
      }
      &:before {
        transition: transform $fab-close-animation-time,
      opacity $fab-close-animation-time;
        content: ' ';
        position: absolute;
        top: 50%;
        left: 50%;
        width: $fab-close-line-length;
        height: $fab-close-line-thickness;
        background: white;
        margin-top: -2px;
        margin-left: -$fab-close-line-length/2;
        transform: rotate(0);
        opacity: 0;

      }
      &:after {
        transition: transform $fab-close-animation-time,
      opacity $fab-close-animation-time;
        content: ' ';
        position: absolute;
        top: 50%;
        left: 50%;
        width: $fab-close-line-length;
        height: $fab-close-line-thickness;
        background: white;
        margin-top: -2px;
        margin-left: -$fab-close-line-length/2;
        transform: rotate(0);
        opacity: 0;
      }
    }
    &.active{
      .btn-large{
        i{
          opacity: 0;
        }
        &:before{
          opacity: 1;
          transform: rotate(($fab-close-spins*2+1)*45deg);
        }
        &:after{
          opacity: 1;
          transform: rotate(($fab-close-spins*2+1)*135deg);
        }
      }
    }
  }
}
</style>
