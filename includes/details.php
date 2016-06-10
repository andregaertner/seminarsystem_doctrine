<?php

class Details
{
    /**
     * 
     * @param type $db
     * @method showUsersystem
     * @return type array
     */
    function showUsersystem()
    {
        // query
        /*
        $sql = 'SELECT count(id) as anzahl
                FROM benutzer';

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        unset($stmt);
        */
        $result = 'todo';
        return $result;
    }

    /**
     * 
     * @param type $db
     * @method showCategorysystem
     * @return type array
     */
    function showCategorysystem($db)
    {
        // query
        $sql = 'SELECT count(id) as anzahl
                FROM kategorien';

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        unset($stmt);

        return $result;
    }

    /**
     * 
     * @param type $db
     * @method showSeminaresystem
     * @return type array
     */
    function showSeminaresystem($db)
    {
        // query
        $sql = 'SELECT count(id) as anzahl
                FROM seminare';

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        unset($stmt);

        return $result;
    }

    /**
     * 
     * @param type $db
     * @method showSeminarterminesystem
     * @return type array
     */
    function showSeminarterminesystem($db)
    {
        // query
        $sql = 'SELECT count(id) as anzahl
                FROM seminartermine';

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        unset($stmt);

        return $result;
    }

    /**
     * 
     * @param type $db
     * @method showAllRegistrateUser
     * @return type array 
     */
    function showAllRegistrateUser($db)
    {
        // query
        $sql = 'SELECT * 
                FROM nimmt_teil';

        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        unset($stmt);

        return $result;
    }
}
