<?php
include "Controller/control.php";
class kartunView extends kartunController 
{
    public function show()
    {
        $kartun = $this->getKartun();

        foreach ($kartun as $kartun) { 
            ?>
            <tr>
                <td><?php echo $kartun["id"]; ?></td>
                <td><?php echo $kartun["nama"]; ?></td>
                <td><?php echo $kartun["episode"]; ?></td>
                <td><?php echo $kartun["stock"]; ?></td>
            </tr>
            <?php
        }
    }

    public function find()
    {
        $deskripsikartun = $this->getkartunBy();
        
        if (empty($detail)) {
            return;
        }

        foreach ($detail as $detail) { ?>
            <div>
                <h3><?php echo $detail["nama"]; ?></h3>
                <p><?php echo $detail["episode"]; ?></p>
                <p><?php echo $detail["rating"]; ?></p>
            </div>
        <?php
        }
    }
}
?>