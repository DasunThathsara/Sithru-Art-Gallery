<?php
$titlle = 'Photographer Article';
include_once '../../includes/header.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $id = $_GET["id"];

    if(!$id){
        header("Location: register.php?error=stmtfailed");
        exit();
    }
}

?>

<div class="container">
  <p class="p-5" >මෙම ප්‍රශ්න කිහිපයට පිළිතුරු සපයන්න. වෙනත් යමක් ඇත්නම් වෙනත් ලෙස ඇති කොටසෙහි සදහන් කරන්න.</p>
</div>
<div class="container mt-3" style="width:50%;">
<form action="../../includes/register.inc.php" method="post">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" name="q1" rows="4" required></textarea>
    <label class="form-label text-wrap">ආයුබෝවන්, ඉතිං කොහොමද මේ දවස් වල ජීවිතේ ?</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="q2" rows="4" required></textarea>
    <label class="form-label text-wrap">ඔබගේ පෞද්ගලික විස්තර ගැන ටිකක් කතා කලොත් ?</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="q3" rows="4" required></textarea>
    <label class="form-label text-wrap">ඒ වගේම අපි දැනගන්න කැමතියි, මේ දවස් වල මොනවද ඔබ කරන වැඩ කටයුතු ?</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="q4" rows="4" required></textarea>
    <label class="form-label text-wrap">තරුණයෙක් / තරුණියක් විදියට ඔබ ඡායාරූප ක්ෂේත්‍රය තෝරා ගන්නේ ඇයි ?</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="q5" rows="4" required></textarea>
    <label class="form-label text-wrap">ඔයාට මේ ක්ෂේත්‍රයේ ඉදිරියට එන්න සහය උනේ කවුද ?</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="q6" rows="4" required></textarea>
    <label class="form-label text-wrap">අනාගත බලාපොරොත්තුව මොකද්ද ?</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="q7" rows="4" required></textarea>
    <label class="form-label text-wrap">ඔබ ඡායාරූපකරණයට අමතරව වෙනත් රැකියාවක් කරනවද ?</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="q8" rows="4" required></textarea>
    <label class="form-label text-wrap">ක්ෂේත්‍රයට අලුතින් එන කෙනෙක්ට මොනවද කියන්න තියෙන්නේ ?</label>
  </div>

  <div class="form-outline mb-4">
    <textarea class="form-control" name="other" rows="4"></textarea>
    <label class="form-label text-wrap">වෙනත්</label>
  </div>

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>

  <p class="p-5" >හැකි ඉක්මනින් අපගේ සංස්කරකවරයකු ඔබව සම්බන්ද කරගනු ඇත.</p>

  </form>


</div>

<?php
include_once '../../includes/footer.php';
?>