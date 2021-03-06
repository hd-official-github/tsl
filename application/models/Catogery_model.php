<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Catogery_model  extends CI_Model
{
    function getsub_loc($name)
    {
        $this->db->where('location_name', $name);
        return $this->db->get('sub_location');
    }
    function getcat($name)
    {
        $this->db->where('location', $name);
        return $this->db->get('category');
    }
    function get_subcat($id, $loc)
    {
        $this->db->where(array('category_id' => $id, 'sub_location' => $loc));
        return $this->db->get('business_list');
    }
    function get_subcat_from_list($id, $city, $subcat)
    {
        $this->db->where(array('category_id' => $id, 'sub_location' => $city, 'sub_category' => $subcat));
        return $this->db->get('business_list');
    }
    function get_subcat_from_list_sub($city, $subcat)
    {
        $this->db->where(array('sub_location' => $city, 'sub_category' => $subcat));
        return $this->db->get('business_list');
    }
    function get_subcat_from_lists($id, $city, $subcat)
    {
        $this->db->where(array('category_id' => $id, 'location' => $city, 'sub_category' => $subcat));
        return $this->db->get('business_list');
    }
    function get_footer($name)
    {
        $this->db->where('location_name', $name);
        return $this->db->get('location');
    }
    function getcat_id($name)
    {
        $this->db->where('category_name', $name);
        $q = $this->db->get('category');
        foreach ($q->result() as $row) {
            return $row->id;
        }
    }
    function get_all_subcat_bysubloc($loc, $subloc, $c_id, $subcat)
    {
        // echo $loc,$subloc,$c_id,$subcat; die;
        $this->db->where(array('location' => $loc, 'sub_location' => $subloc, 'category_id' => $c_id, 'sub_category' => $subcat));
        return $this->db->get('business_list');
    }
    function get_all_subcat_bysubloc_list($subloc, $subcat)
    {
        // echo $loc,$subloc,$c_id,$subcat; die;
        $this->db->where(array('sub_location' => $subloc, 'sub_category' => $subcat));
        return $this->db->get('business_list');
    }
    function get_footer_of_cat($cat)
    {
        $this->db->where('category_name', $cat);
        return $this->db->get('category');
    }
    function get_cat($subloc, $subcat)
    {
        $this->db->where(array('sub_location' => $subloc, 'sub_category' => $subcat));
        $q = $this->db->get('business_list');
        foreach ($q->result() as $row) {
            return $row->category_id;
        }
    }
    function get_cat_name($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('category');
    }
    function get_cat_name_byname($name)
    {
        $this->db->where('sub_category_name', $name);
        return $this->db->get('subcategory');
    }
    public function get_business_list($business_id)
    {
        $this->db->select('business_list.*,business_reviews.name,business_reviews.rating,business_reviews.review_text');
        $this->db->from('business_list');
        $this->db->join('business_reviews', 'business_list.business_id = business_reviews.business_id');
        $this->db->where('business_list.business_id', $business_id);
        $query = $this->db->get();
        //echo $this->db->last_query(); die;
        return $query->result_array();
    }
    function get_business_id($id)
    {
        $this->db->where('category_id', $id);
        $q =   $this->db->get('business_list');
        foreach ($q->result() as $row) {
            return $row->business_id;
        }
    }
    function get_review($id)
    {
        $this->db->where('business_id', $id);
        return $this->db->get('business_reviews', 1, 0);
    }
    function get_review_all($id)
    {
        $this->db->where('business_id', $id);
        return $this->db->get('business_reviews');
    }
    function get_city($id)
    {
        $this->db->where('category_id', $id);
        $q = $this->db->get('business_list');
        foreach ($q->result() as $row) {
            return $row->location;
        }
    }
    function getmatch_loc($city, $rows)
    {
        $this->db->where(array('location' => $city));
        return $this->db->get('business_list', 99999, $rows);
    }
    function getmatch_loc_list($subloc, $rows)
    {
        $this->db->where(array('sub_location' => $subloc));
        return $this->db->get('business_list', 99999, $rows);
    }
    function get_details($id)
    {
        $this->db->where('business_name', $id);
        return $this->db->get('business_list');
    }
    function get_business_image($id)
    {
        $this->db->where('business_id', $id);
        return $this->db->get('business_images');
    }
    function get_faq($id)
    {
        $this->db->where('business_id', $id);
        return $this->db->get('business_faq');
    }
    function get_recommanded($cat_id, $loc, $id)
    {
        $this->db->where(array('category_id' => $cat_id, 'location' => $loc, 'business_name !=' => $id));
        return $this->db->get('business_list');
    }
    function get_detail_by_locname($city)
    {
        $this->db->where('location', $city);
        return $this->db->get('business_list');
    }
    function get_feature1()
    {
        $this->db->select('*');
        $this->db->from('business_list');
        $this->db->join('business_feature', 'business_feature.business_id=business_list.business_id');
        return $this->db->get();
    }
    function get_feature2()
    {
        $this->db->select('*');
        $this->db->from('business_list');
        $this->db->join('business_feature2', 'business_feature2.business_id=business_list.business_id');
        return $this->db->get();
    }
    function get_blogs($name)
    {
        $this->db->where('loc', $name);
        return $this->db->get('blogs', 4, 0);
    }
    function get_banner1($city, $cat = NULL)
    {
        $this->db->where(array('location' => $city, 'cat' => $cat));
        return $this->db->get('business_banner1');
    }
    function get_banner_forlist()
    {
        return $this->db->get('business_banner_forlist');
    }
    function get_banner2($city, $cat = NULL)
    {

        $this->db->where(array('location' => $city, 'cat' => $cat));

        return $this->db->get('business_banner2');
    }
    function get_feature_blog($city)
    {
        $this->db->where('location', $city);
        return $this->db->get('feature_blog', 1, 0);
    }
    function submit_review($data)
    {
        $this->db->insert('business_reviews', $data);
    }
    function get_business_idby_name($name)
    {
        $this->db->where('business_name', $name);
        $q = $this->db->get('business_list');
        foreach ($q->result() as $row) {
            return $row->business_id;
        }
    }
    function get_all_subcat($cat, $loc)
    {
        $this->db->where(array('category_name' => $cat, 'location' => $loc));
        return $this->db->get("subcategory");
    }
    function get_all_subcat_list($subcat, $loc)
    {
        $this->db->where(array('sub_category' => $subcat, 'sub_location' => $loc));
        return $this->db->get("business_list");
    }
    function geta_meta_details($subcat, $loc)
    {
        $this->db->where(array('sub_category_name' => $subcat, 'location' => $loc));
        return $this->db->get('subcategory');
    }
    function geta_meta_details_lidt($subcat, $loc)
    {
        $this->db->where(array('sub_category_name' => $subcat, 'location' => $loc));
        return $this->db->get('subcategory');
    }
    function validate_loc($loc)
    {
        $this->db->where('location_name', $loc);
        $val = $this->db->get("location");
        return $val->num_rows();
    }
    function validate_category($cat)
    {
        $this->db->where('category_name', $cat);
        $val = $this->db->get("category");
        return $val->num_rows();
    }
    function validate_subcategory($subcat)
    {
        $this->db->where('sub_category_name', $subcat);
        $val = $this->db->get("subcategory");
        return $val->num_rows();
    }
    function getcatid($subloc, $subcat)
    {
        $this->db->where(array('sub_location' => $subloc, 'sub_category' => $subcat));
        $q = $this->db->get('business_list');
        foreach ($q->result() as $row) {
            return $row->category_id;
        }
    }
    function get_all_subcat_list1($subcat, $loc)
    {
        $this->db->where(array('sub_category_name' => $subcat, 'location' => $loc));
        $this->db->get('subcategory');
    }
    function get_cat_by_subcat($subcat)
    {
        $this->db->where('sub_category_name', $subcat);
        $q = $this->db->get('subcategory');
        foreach ($q->result() as $row) {
            return $row->category_name;
        }
    }
    function get_sub_location($loc)
    {
        $this->db->where('location_name', $loc);
        return $this->db->get('sub_location');
    }
    function getcity_banner1($city)
    {
        $this->db->where(array('location' => $city, 'cat' => NULL));
        return $this->db->get('business_banner1');
    }
    function getcity_banner2($city)
    {
        $this->db->where('location', $city);
        return $this->db->get('business_banner2');
    }
}
