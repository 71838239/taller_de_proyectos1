DELIMITER //
CREATE PROCEDURE sp_c_solicitudes ( IN
	_otorgadox varchar(45),
    _afavor varchar(45),
    _RUCNot varchar(10),
    _DNISol varchar(8),
    _DNIUser varchar(8)
)
BEGIN
	DECLARE _codAcc varchar(6);
    DECLARE _dniSolR varchar(1);
    DECLARE _dniSolL varchar(1);
    DECLARE _numRand varchar(2);
    DECLARE _apellidopaterno varchar(45);
    DECLARE _apellidomaterno varchar(45);
    DECLARE _aPater varchar(1);
    DECLARE _aMater varchar(1);
    
    SELECT apellidoPaterno into _apellidopaterno FROM solicitantes WHERE DNI = _DNISol;
    SELECT apellidoMaterno into _apellidomaterno FROM solicitantes WHERE DNI = _DNISol;
    
    SET _numRand = FLOOR(10 + RAND() * (99-10));
    SET _dniSolR = RIGHT(_DNISol,1);
    SET _dniSolL = LEFT(_DNISol,1);
    SET _aPater = LEFT(UPPER(_apellidopaterno),1);
    SET _aMater = LEFT(UPPER(_apellidomaterno),1);
    SET _codAcc = concat(_dniSolL,_aPater,_numRand,_aMater,_dniSolR) ;
    
    INSERT INTO solicitudes (idSolicitud,fechaRegistro,otorgadoX,aFavor,fechaDoc,pathVoucher,fechaPago,
    fechaEntrega,codAcceso,Estados_idEstado,Notarios_RUC,Solicitantes_DNI,Usuarios_DNI) values 
    (null,NOW(),_otorgadox,_afavor,null,null,null,null,_codAcc,'PROCBUSQ',
    _RUCNot,_DNISol,_DNIUser);
END;
//DELIMITER ;
/*------------ejecutando------------*/
CALL sp_c_solicitudes('alva','roj','1234567893','48114711','78965433');