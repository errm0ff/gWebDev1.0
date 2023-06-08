<?php
class IndexModel extends Model 
{
    public function getJobsCount() 
    {
        $sql = "SELECT COUNT(*) FROM `jbh_jobs`";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchColumn();
        
        return $res; 
    }
    public function getMembersCount() 
    {
        $sql = "SELECT COUNT(*) FROM `jbh_users`";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchColumn();
        
        return $res; 
    }
    public function getCitiesCount() 
    {
        $sql = "SELECT COUNT(*) FROM `jbh_cities`";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchColumn();
        
        return $res; 
    }
    public function getCoutriesCount() 
    {
        $sql = "SELECT COUNT(*) FROM `jbh_countries`";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchColumn();
        
        return $res; 
    }
    public function getJobsList() {
        $sql = "SELECT 
            `jbh_jobs`. `J_Id` as id,
            `jbh_jobs`. `J_Name` as title,
            `jbh_jobs`. `J_Description` as descr,
            `jbh_jobs`. `J_Price`as price,
            `jbh_jobs`. `J_Post_Date`,
            `jbh_cities`.`Ci_Name` as location
           FROM `jbh_jobs` 
           LEFT JOIN jbh_cities ON jbh_cities.Ci_Id = jbh_jobs.J_Zone 
           ORDER BY `J_Post_Date` DESC LIMIT 5;";
        
        $res = array();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $res[$row['id']] = $row;
        }
        return $res; 

        
    }
    
}
