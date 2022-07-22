<?php
require_once "data/polymorphism/pholymorphism.php";
// Melakkukan pengecekan instan obejct dari darimana asal dibuatny
helloProgrammer(new Programmer("Rendi"));
helloProgrammer(new BackendProgrammer("Riki"));
helloProgrammer(new FrondenProgramer("Sinta"));
// helloProgrammer(new Manager("Ujang"));