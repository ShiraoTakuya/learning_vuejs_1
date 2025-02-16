export function get_csrf(){
  return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
}