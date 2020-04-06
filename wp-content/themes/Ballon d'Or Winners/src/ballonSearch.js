export default async function ballonSearch(input){


    try{

         const result = await fetch(`${ballonData.root_url}/wp-json/wp/v2/posts/${input}`);

         const data = await result.json();

         return data;

    }
    catch(err){

        console.log(err);
    }


}